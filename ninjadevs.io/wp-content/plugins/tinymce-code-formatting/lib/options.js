
jQuery(function($){
  var input=$('.mcecode-option input')
  input.each(function(id,item){
    
    $(item).keydown(function(e){
      if (e.ctrlKey) {                // combinations only with Ctrl
        var combo=getCombo(e)
        if(combo){
          item.value=combo
          e.preventDefault()          // no reload, new tab, close tab, ... actions
        }
      }
    })
    
  })
})
