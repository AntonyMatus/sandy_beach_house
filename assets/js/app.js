// zoomin Zoomout
var element = document.querySelector('#svg-container')
const screenWidth = window.screen.width

var instance = panzoom(element, {
    contain: 'inside',
    minZoom: 1,
    step: 2,
    onTouch: function(e) {
        return false;
    }
})

const zoomIn = () => {
    let container = document.querySelector('#scene')
    let rect = container.getBBox();
    let width = (screenWidth <= 600) ? 10 : 5;
    let height = (screenWidth <= 600) ? 14 : 10;
    let cx = rect.x + rect.width/width;
    let cy = rect.y + rect.height/height;
    let zoomBy = 1.5;
    instance.zoomTo(cx, cy, zoomBy);
}

const zoomOut = () => {
    instance.zoomAbs(0, 0, 1)
    instance.moveTo(0, 0)
}






function getLotById(id) {

    console.log("contact");
    fetch(`../../backend/lost.php?id=${id}`)
    .then(res => res.json())
    .then(data => {
                // assing values
            const { 
                id, 
                number, 
                area, 
                available
            } = data.lot

            this.lot.id = id
            this.lot.number = number
            this.lot.area = area
            this.lot.front_and_width = ' 7m de frente x 16.5 de fondo'
            this.lot.available = available

            // reset values
            this.contact_lot.first_name = ''
            this.contact_lot.last_name = ''
            this.contact_lot.email = ''
            this.contact_lot.phone = ''

            // show modal
            $('#modal-lots').modal('show')
        })
        .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))
    };
    function formartPrice(value) {
            return value.toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD',
            })
    };
    function  onSubmitLotMail() {

            if (
                this.contact_lot.first_name !== '' &&
                this.contact_lot.last_name !== '' &&
                this.contact_lot.email !== '' &&
                this.contact_lot.phone !== ''
            ) {

                const form_contact_lot = document.getElementById('form-lot')
                const data_contact_lot = new FormData(form_contact_lot)
                data_contact_lot.append('lot_number', this.lot.number)

                fetch('/landing/backend/contact-lots.php', {
                    method: 'POST',
                    body: data_contact_lot,
                })
                .then(res => res.json())
                .then(data => {

                    this.contact_lot.first_name = ''
                    this.contact_lot.last_name = ''
                    this.contact_lot.email = ''
                    this.contact_lot.phone = ''

                    $('#modal-lots').modal('hide')                    

                    toastr.success('El mensaje se envio con exito')
                })
                .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))

            } else {
                toastr.error('Verifica los datos ingresados')
            }

        };
        function onSubmitUserMail() {

            if (
                this.contact_user.name !== '' &&
                this.contact_user.subject !== '' &&
                this.contact_user.email !== '' &&
                this.contact_user.message !== ''
            ) {

                const form_contact_user = document.getElementById('form-user')
                const data_contact_lot = new FormData(form_contact_user)

                fetch('/landing/backend/contact-users.php', {
                    method: 'POST',
                    body: data_contact_lot,
                })
                .then(res => res.json())
                .then(data => {

                    this.contact_user.name = ''
                    this.contact_user.subject = ''
                    this.contact_user.email = ''
                    this.contact_user.message = ''

                    $('#modal-lots').modal('hide')                    

                    toastr.success('El mensaje se envio con exito')
                })
                .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))

            } else {
                toastr.error('Verifica los datos ingresados')
            }

        }
        function closeModal() {
            $('#modal-lots').modal('hide') 
        }
    





// assing color state to lots in svg
const lots = document.querySelectorAll('.cls-1')

for (var i = 0; i < lots.length; i++) {
    const available = parseInt(lots[i].getAttribute('data-available'))

    const color = selectColor(available)

    lots[i].style.fill = color

}

function selectColor(available) {
    switch (available) {
        case 1:
            return '#008000';
            break;

        case 2:
            return '#f5b225';
            break;

        case 3:
            return '#ff0000';
            break;
    
        default:
            return '#6c757d';
            break;
    }
}

// show popover by lot
$(".cls-1").mouseover(function() {
     const lotId = $(this).attr('id')
    const lotNum = $(this).attr('data-number')
    const lotArea = $(this).attr('data-area')
    
     tippy(`#${lotId}`, {
         allowHTML: true,
         content: `<p>No. Lote: ${lotNum} <br> Área: ${lotArea}m<sup>2</sup></p>`,
         theme: 'light'
     })
 })

