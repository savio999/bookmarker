//function used to filter alphabetically or show all rows

var _alphabetSearch = '';
 
$.fn.dataTable.ext.search.push( function ( settings, searchData ) {
    
    if ( !_alphabetSearch || _alphabetSearch=='All' ) {
        return true;
    }
 
    if ( searchData[1].charAt(0) === _alphabetSearch ) {
        return true;
    }
 
    return false;
} );
 
 
//function to filter rows

  $.fn.dataTableExt.afnFiltering.push(
    function( oSettings, aData, iDataIndex ) {
       
       if(aData[4]=='Edinburgh' && $('#showEdinburgh').val()==0)
       {
              return false;
       }
       
       return true;
    }
);

$(document).ready(function() {
    //initialise
    var table = $('#example').DataTable(
    {
      "columnDefs":[
      {//hide column
        "targets":[0],
        "visible":false,
        "searchable":false
      },{
       //remove sort
        "targets":[5],
        "orderable":false
      }
      ]
    }
    );
       
    //on click of alpha  key or all 
    $('.alpha').on('click',function()
    {
        $('.latest').removeClass('active');
        $('.alpha').removeClass('active');
        $(this).addClass('active');   
        table.order([0,'asc']);
              
        _alphabetSearch=$(this).find('a').text();
        table.draw();
    } );

    //on click of latest key
    $('.latest').on('click',function()
    {
            $('.alpha').removeClass('active');
            $('.latest').addClass('active');
            _alphabetSearch='';
            table.order([0,'desc']);
            table.draw();
    });
    
    //on click of hide button
    $("#hideBtn").on('click',function()
    {
         var hidden = $('#showEdinburgh').val();
  
          if(hidden==1)
          {
              $('#showEdinburgh').val(0);
              $("#hideBtn").text('Show Edinburgh');
          }else{
               $('#showEdinburgh').val(1);
              $("#hideBtn").text('Hide Edinburgh');
          }
          
          table.draw();
    });

});