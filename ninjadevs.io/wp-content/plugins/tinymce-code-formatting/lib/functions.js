
/*
 * Maps the 'key' to the output string key
 * For ASCII codes changes keyCode values to get correct character
 * For function keys gets the right key name depending on the keyCode
 * For NumPad keys coverts keyCode to string representation
 */
function getSymbol(key){
  var symbol

  var function_keys={
    '112':'F1',
    '113':'F2',
    '114':'F3',
    '115':'F4',
    '116':'F5',
    '117':'F6',
    '118':'F7',
    '119':'F8',
    '120':'F9',
    '121':'F10',
    '122':'F11',
    '123':'F12',
  }
  
  var numpad_keys={
    '96': 'Pad0',
    '97': 'Pad1',
    '98': 'Pad2',
    '99': 'Pad3',
    '100':'Pad4',
    '101':'Pad5',
    '102':'Pad6',
    '103':'Pad7',
    '104':'Pad8',
    '105':'Pad9',
    
    '106':'Pad*',
    '107':'Pad+',
    '109':'Pad-',
    '110':'Pad.',
    '111':'Pad/',
  }
  
  var ascii_codes = {
    '173': '45',  // -
    '188': '44',  // ,
    '190': '46',  // .
    '191': '47',  // /
    '192': '96',  // `
    '219': '91',  // [
    '220': '92',  // \
    '221': '93',  // ]
    '222': '39',  // '
    '187': '61', //IE Key codes
    '186': '59', //IE Key codes
    '189': '45'  //IE Key codes
  }

  if(function_keys.hasOwnProperty(key)){
    return function_keys[key]
  }
  
  if(numpad_keys.hasOwnProperty(key)){
    return numpad_keys[key]
  }
  
  if (ascii_codes.hasOwnProperty(key)) {
    key = ascii_codes[key]
  }
  
  symbol=String.fromCharCode(key)
  return symbol
}

/*
 * Returns key combination as a string
 * Processes Ctrl, Shift, Alt modifiers and skips combinations (Ctrl+A,+X,+C,+V)
 */
function getCombo(e){
  var key=e.which
  var skip=[65,67,86,88]  // a, x, c, v
  
  // if 'Ctrl+Shift+A, Ctrl+Alt+C, Ctrl+Shift+Alt+V, ...'
  
  if(skip.indexOf(key)!=-1 && !e.shiftKey && !e.altKey){
    return false
  }
  
  if(key>46){
    var combo="Ctrl+"
    if(e.shiftKey) combo+="Shift+"
    if(e.altKey) combo+="Alt+"
      
    combo+=getSymbol(key) 
    console.log(combo);
    
    return combo
  }
  
  // console.log('key: '+key);
  return false
}
