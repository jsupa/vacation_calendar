function changeVac(el, date, name) {
  var x = el.value;
  el.className = '_'+x;
  // console.log(name+' si dal '+x+ ' '+date);
  var req = $.ajax({
    url: '_partials/change.php',
    type: 'POST',
    data: 'date='+date+'&name='+name+'&action='+x
  });
  req.done(function(data) {
    console.log(data);
  });
}