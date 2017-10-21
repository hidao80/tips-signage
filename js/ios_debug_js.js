window.addEventListener('error', function(error) {
  var result = document.getElementById('result') || (function() {
    var result = document.createElement('pre');
    result.setAttribute('id', 'result');
    document.getElementsByTagName('body')[0].appendChild(result);
    return result;
  })();
  var message = [error.filename, '@', error.lineno, ': ', error.message].join('');

  result.textContent += '\n' + message;

  return false;
});