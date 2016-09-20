
(function() {
  
  tinymce.create('tinymce.plugins.CodeFormatting', {
    /* @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
     * @param {string} url Absolute URL to where the plugin is located.
     */
     
    init : function(ed, url) {
      
      ed.addCommand('preFormat', function() {
        ed.formatter.toggle('pre');
      });
      ed.addCommand('codeFormat', function() {
        ed.formatter.toggle('code');
      });
      
      ed.addButton('preButton', {
        title : 'Pre',
        cmd : 'preFormat',
        image : url + '/images/pre.png'
      });
      ed.addButton('codeButton', {
        title : 'Code',
        cmd : 'codeFormat',
        image : url + '/images/code.png'
      });
      
      
      var preShortcut,codeShortcut
      try{
        preShortcut=pre_shortcut.toLowerCase()
        codeShortcut=code_shortcut.toLowerCase()
      }catch(e){
        preShortcut="ctrl+q"
        codeShortcut="ctrl+d"
      }
      
      ed.on('keydown', function(e) {
        if (e.ctrlKey) {
          var combo=getCombo(e)
          
          if(combo){
            combo=combo.toLowerCase()
            switch(combo){
              case preShortcut:
                ed.execCommand('preFormat')
                e.preventDefault()
                break;
              case codeShortcut:
                ed.execCommand('codeFormat')
                e.preventDefault()
                break;
            } 
          }
        }
        
      });
      
      // ed.addShortcut(preShortcut,'Pre Format','preFormat')
      // ed.addShortcut(codeShortcut,'Code Format','codeFormat')
    },
  });

  // Register plugin
  tinymce.PluginManager.add('codeFormatting', tinymce.plugins.CodeFormatting);
  
})();
