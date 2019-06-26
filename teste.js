// var http = require('http');
// //var jqueryScrollify = require("jquery-scrollify");
// //var jquery = require("jquery");
//
//
// function getVerseOfTheDay(callback, error) {
// 	http.get('~/srv/http/integrador/index.html', function(response) {
// 		var verse = '';
//
// 		response.on('data', function(d) {
//             verse += d;
//         });
//
// 		response.on('end', function () {
// 			callback(verse);
// 	  	});
// 	}).on('error', function(e) {
// 		error(e);
// 	});
// }
//
// http.createServer(function (req, res) {
//
// 	//Verso do Dia ;)
// 	getVerseOfTheDay(function(verse){
// 		res.writeHead(200, {'Content-Type': 'text/html'});
// 		res.end(verse);
// 	}, function(e){
// 		res.writeHead(500, {'Content-Type': 'text/html'});
// 		res.end(e);
// 	});
// }).listen(3000);
// console.log('Servidor iniciado em localhost:3000. Ctrl+C para encerrar…');
//
//
// // http.createServer(function(req,res) {
// //   res.writeHead(200, { "Content-Type': 'text/plain; charset=utf-8" });
// //   res.end(" <html lang='pt-br' dir='ltr'>
// //     <head>
// //       <meta charset='utf-8'>
// //       <title>trabalhos selecionados</title>
// //       <script src='../js/trabalhosSelecionados.js' charset='utf-8'></script>
// //       <link type='text/css' rel='stylesheet' href='../sass/css/trabalhosSelecionados.css'>
// //       <script src='../js/backgroundChiado.js' charset='utf-8'></script>
// //       <script src='../js/frameworks/jquery-3.4.1.min.js'></script>
// //     </head>
// //
// //     <body>
// //       <canvas id='noise' class='noise'></canvas>
// //       <section class='container'>
// //         <header>
// //           <div id='voltar' title='Voltar á pagina anterior'>
// //             <a href='../index.html'><span>&#60;</span></a>
// //           </div>
// //         </header>
// //         <main id='container' >
// //             <section class='sectionAlbum'></section>
// //             <section class='sectionAlbum'></section>
// //             <section class='sectionAlbum'></section>
// //             <section class='sectionAlbum'></section>
// //         </main>
// //       </section>
// //     </body>
// //   </html>
// // ");
// // })
