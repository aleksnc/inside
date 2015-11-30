dragObject = null
$(document).mouseup(function() {
    if (!dragObject) return
    dragObject.style.backgroundColor = ''
    dragObject = null
})

