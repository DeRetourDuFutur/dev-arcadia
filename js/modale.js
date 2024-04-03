// Global DOM var
const $body = $('#body')
const $openModalBtn = $('.open-modal-btn')
const $mainWrapper = $('#main-wrapper')
const $modal = $('.modal')
const $modalTitle = $('.modal-title')
const $modalCloseBtn = $('.modal-close-btn')
 
// Func
const onOpenModal = () => {
   $mainWrapper.attr('aria-hidden', 'true')
   $modal.attr('aria-hidden', 'false')
   $body.addClass('no-scroll')
   $modal.css('display', 'flex')
   $modalCloseBtn.focus()
}
 
const onCloseModal = () => {
   $mainWrapper.attr('aria-hidden', 'false')
   $modal.attr('aria-hidden', 'true')
   $body.removeClass('no-scroll')
   $modal.css('display', 'none')
   $openModalBtn.focus()
}
 
// Event
$openModalBtn.click(function() {
   onOpenModal()
})
 
$modalCloseBtn.click(function() {
   onCloseModal()
})
 
// Close modal when espace key is pressed
$(document).on('keydown', e => {
   const keyCode = e.keyCode ? e.keyCode : e.which
 
   if ($modal.attr('aria-hidden') == 'false' && keyCode === 27) {
       onCloseModal()
   }
})
