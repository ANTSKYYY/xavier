if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) ) {
 return;	
 console.log('On mobile');
} else {
 console.log('Not on mobile');
}
