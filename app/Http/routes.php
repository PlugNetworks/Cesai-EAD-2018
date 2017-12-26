<?php


Route::get('/', 'PrincipalController@index');

Route::get('/quemsomos', 'SobreController@index');

Route::get('/metodo', 'MetodoController@index');

Route::get('/todos/cursos', 'CursoController@index');

Route::get('/categoria/administracao', 'PageAdministracao@index');

Route::get('/categoria/administracao/detalhes/{id}', 'PageAdministracao@detalhes');

Route::get('/categoria/computacao-grafica', 'PageComputacaograf@index');

Route::get('/categoria/computacao-grafica/detalhes/{id}', 'PageComputacaograf@detalhes');

Route::get('/categoria/desenvolvimento', 'PageDesenvolvedor@index');

Route::get('/categoria/desenvolvimento/detalhes/{id}', 'PageDesenvolvedor@detalhes');

Route::get('/categoria/designer-grafico', 'PageDesignerGraf@index');

Route::get('/categoria/designer-grafico/detalhes/{id}', 'PageDesignerGraf@detalhes');

Route::get('/categoria/informatica-basica', 'PageInformaticaBasica@index');

Route::get('/categoria/informatica-basica/detalhes/{id}', 'PageInformaticaBasica@detalhes');

Route::get('/categoria/informatica-kids', 'PageInformaticakids@index');

Route::get('/categoria/informatica-kids/detalhes/{id}', 'PageInformaticakids@detalhes');

Route::get('/categoria/informatica-master', 'PageInformaticamaster@index');

Route::get('/categoria/informatica-master/detalhes/{id}', 'PageInformaticamaster@detalhes');

Route::get('/categoria/manutencao-pc', 'PageManutencao@index');

Route::get('/categoria/manutencao-pc/detalhes/{id}', 'PageManutencao@detalhes');

Route::get('/categoria/marketing-digital', 'PageMarketingDig@index');

Route::get('/categoria/marketing-digital/detalhes/{id}', 'PageMarketingDig@detalhes');

Route::get('/categoria/melhor-idade', 'PageMelhorIdade@index');

Route::get('/categoria/melhor-idade/detalhes/{id}', 'PageMelhorIdade@detalhes');

Route::get('/categoria/profissionalizantes', 'PageProfissionalizates@index');

Route::get('/categoria/profissionalizantes/detalhes/{id}', 'PageProfissionalizates@detalhes');

Route::get('/categoria/recursos-humanos', 'PageRecursosHumanos@index');

Route::get('/categoria/recursos-humanos/detalhes/{id}', 'PageRecursosHumanos@detalhes');

Route::get('/categoria/software-livre', 'PageSoftwareLivre@index');

Route::get('/categoria/software-livre/detalhes/{id}', 'PageSoftwareLivre@detalhes');

Route::get('/categoria/web-designer', 'PageWebDesigner@index');

Route::get('/categoria/web-designer/detalhes/{id}', 'PageWebDesigner@detalhes');

Route::get('/contatos', 'ContatosController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
