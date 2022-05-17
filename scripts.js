
 $( window ).on( "load", function() {
   $('#flexSwitchCheckChecked').on('change.bootstrapSwitch', function(e) {
       // console.log(e.target.checked);
       if(e.target.checked == true) $('#delayedReleaseDateDiv').removeClass('d-none').addClass('d-flex');
       if(e.target.checked == false) $('#delayedReleaseDateDiv').addClass('d-none').removeClass('d-flex');
   });
 });
