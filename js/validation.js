/**
 * Created by cinjko on 11.02.2015.
 */
function validation(){

    if (document.getElementById("first_name").value == ""){
        jQuery("input.first_name").addClass('error');
        return false;
    } else {

        jQuery("input.first_name").removeClass('error');
        return true;
    }
}
