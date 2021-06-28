var app = new Vue({
  el:'#vueMain',
  data:{
    searchString: "",
    title: "Estadisticas",
    excel_name: "",
    excel_folder: "",
    json: [],
    json_keys: []
  }, //END DATA
  created: function () {
    this.loadApi("2019_SEE_PRES_MUN_BC_SEC", "AYUNTAMIENTOS", "Estadística de Ayuntamientos por Sección")
  },
  methods: {
    loadApi(name, folder, title) {
      this.excel_name = name
      this.excel_folder = folder
      const vm = this
      $('#navbarTogglerDemo03').collapse('hide')
      $('#LOAD').animate({left: '0'})
      $('#LOAD').promise().done(function(){
        jQuery.ajax({
          type: "POST",
          url: 'connections/getExcelJSONVue.php',
          data: {'excel_name': name, 'excel_folder': folder},
          success:function(data) {
            vm.json = JSON.parse(data)
            vm.json_keys = Object.keys(vm.json[0])
            vm.title = folder + " > " + title
            console.log(vm.json_keys)
            $('#LOAD').animate({left: '-100%'})
          }
        });
      })
    },
    getKeyImage(key) {
      if (this.excel_folder.localeCompare("AYUNTAMIENTOS") == 0)
        return "assets/MUNICIPIO/" + key + ".png"
      else
        return "assets/DIPUTADOS/" + key + ".png"
    }
  }, //END METHODS
  computed: {

  },
  mounted: function() {

  }
})
