function share(url) {
    window.open(url,'share-dialog',"width=626,height=236")
}
function toggle(myelm) {
    var x = document.getElementById(myelm);
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}