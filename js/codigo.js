function getExcelInfo(name, folder) {
  $('#navbarTogglerDemo03').collapse('hide')
  $('#LOAD').animate({left: '0'})
  $('#LOAD').promise().done(function(){
    var res = document.getElementById("excel_result")
    var title = document.getElementById("excel_title")
    var form = document.getElementById("formDown")

    form.action = "docs/EXCELS/"+folder+"/"+name+".xlsx"
    title.innerHTML = "<h6>"+folder+" &#62 "+name+".xlsx</h6>"
    res.innerHTML = "";
    jQuery.ajax({
      type: "POST",
      url: 'connections/getExcelJSON.php',
      data: {'excel_name': name, 'excel_folder': folder},
      success:function(data) {
        res.innerHTML = res.innerHTML + "" + data
        $('#LOAD').animate({left: '-100%'})
        /*$('table.tabla').on('click', 'tr', function() {

        });*/
      }
    });
  })
}
