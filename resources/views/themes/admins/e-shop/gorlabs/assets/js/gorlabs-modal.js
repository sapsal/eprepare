'use strict';
function StallionModal (url, title){
    $('#stallion-modal-content').html('...... Loading Content Please Wait ........');
    $('#stallion-modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal').modal('show');
}
function StallionModalInModal (url, title){
    $('#stallion-modal-in-modal-content').html('...... Loading Content Please Wait ........');
    $('#stallion-modal-in-modal-title').html(title);
    $('#stallion-modal-in-modal-content').load(url, function(){});
    $('#stallion-modal-in-modal').modal('show');
}
function StallionModalBlackPrimary (url, title){
    $('#stallion-modal-content-primary').html('...... Loading Content Please Wait ........');
    $('.modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal-content-primary').modal('show');
}
function StallionModalBlackInformation (url, title){
    $('#stallion-modal-content-information').html('...... Loading Content Please Wait ........');
    $('.modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal-content-information').modal('show');
}
function StallionModalBlackWarning (url, title){
    $('#stallion-modal-content-warning').html('...... Loading Content Please Wait ........');
    $('.modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal-content-warning').modal('show');
}
function StallionModalBlackDanger (url, title){
    $('#stallion-modal-content-danger').html('...... Loading Content Please Wait ........');
    $('.modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal-content-danger').modal('show');
}
function StallionModalBlackAlert (url, title){
    $('#stallion-modal-content-alert').html('...... Loading Content Please Wait ........');
    $('.modal-title').html(title);
    $('#stallion-modal-content').load(url, function(){});
    $('#stallion-modal-content-alert').modal('show');
}
function StallionConfirmDelete(url){
    $('#stallion-modal-content-alert').modal('show');
    if(confirm('Are you sure deleting this record ?')){
        window.location.href = url;
    }
    return false;
}
function numbersOnly(myfield, e, dec) {
    let key;
    let keychar;

    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);

    // control keys
    if ((key === null) || (key === 0) || (key === 8) ||
        (key === 9) || (key === 13) || (key === 27))
        return true;

    // numbers
    else if ((("0123456789.").indexOf(keychar) > -1))
        return true;

    // decimal point jump
    else if (dec && (keychar === ".")) {
        myfield.form.elements[dec].focus();
        return false;
    }
    else
        return false;
}
