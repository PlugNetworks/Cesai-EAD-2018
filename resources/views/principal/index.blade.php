@extends('layouts.template')

@section('content')

    <div class="container my-1">

        @include('includes.carousel')

    </div>

    <div class="container-fluid" style="background: #1C1F3D;">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h4 class="text-center mt-5 mb-5" style="color: #FFFFFF;">
                            " Uma escola para você em qualquer lugar que tenha internet,<br>cursos dinâmicos em várias áreas e totalmente interativos,<br>não basta assistir um vídeo, para aprender tem que fazer o curso de verdade! "
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 mt-5">
                <h2 class="text-center">Razões para fazer um curso a distância do CESAI:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4 mt-3">
                        <img src="{{ asset('images/info1.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="col-xl-8 mt-3">
                        <h3 style="color: orangered;">Estude quando e de onde quiser</h3>
                        <p class="text-justify" style="color: #2C3E50; font-size: 17px">
                            O curso ficará disponível 24 horas por dia, 7 dias por semana de forma que o aluno pode acessá-lo no seu tempo disponível de qualquer local que tenha acesso à internet, sem compromisso de horários, permitindo maior flexibilidade para seus estudos. Cada aluno faz seu curso no seu próprio ritmo e conclui no seu tempo sem prejuízo dos compromissos profissionais, sem gastos adicionais com transportes e com melhor investimento do seu tempo.
                            O Portal de Ensino do CESAI-Ensino a Distância possui um DESIGN RESPONSIVO, permitindo que nosso aluno acesse seu curso EAD por meio de seu computador, notebook, tablete ou celular.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mt-5">
                <div class="row">
                    <div class="col-xl-4">
                        <p class="text-center font-italic font-weight-bold" style="font-size: 20px; color: #2C3E50">
                            CESAI-EAD cursos “on-line” com qualidade de presencial, educação e formação profissional com cursos a distância transformando os sonhos dos nossos alunos em realidade!
                        </p>

                    </div>
                    <div class="col-xl-4">
                        <h3 class="text-center">Material Didático</h3>
                        <p class="text-center" style="color: #4d5656; font-size: 18px">
                            Material didático (apostila) digital e gratuito.
                        </p>
                    </div>
                    <div class="col-xl-4">
                        <img src="{{ asset('images/material.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row" style="background:transparent url('images/estudar-online.jpg') no-repeat center center /cover;">
            <div class="container">
                <div class="col-xl-7 ml-auto mt-3 mb-3" style="background:transparent url('images/bg_row.png') repeat center center /cover; padding: 10px">
                    <h3 class="font-weight-bold mt-3 mb-3" style="color: orangered">Avaliação</h3>
                    <p class="text-justify" style="color: #FFFFFF; font-size: 17px">
                        O aluno após estar devidamente matriculado em um ou vários cursos, ter acessado e assimilado o conteúdo, deverá comprovar seus conhecimentos por meio da avaliação online composta por questões de múltipla escolha ou do tipo V ou F. O aluno será aprovado se alcançar nota igual ou superior a 70% de acertos.
                        Caso o aluno não alcance o percentual mínimo, terá direito de realizar a avaliação quantas vezes forem necessárias até obter a aprovação. É de extrema importância que o aluno tenha como objetivo principal APRENDER, e não apenas terminar o curso, por isso, após a reprovação, estude com mais atenção o conteúdo do curso e somente refaça a avaliação quando se sentir realmente preparado.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mt-5">
                <div class="row">
                    <div class="col-xl-7">
                        <h3>Certificação</h3>
                        <p class="text-justify mt-3">
                            Os cursos do CESAI-EAD são destinados a proporcionar às pessoas conhecimentos que lhe permitam profissionalizar-se, qualificar-se e atualizar-se para o trabalho. Todos os certificados emitidos pelo CESAI - EAD seguem a <a href="" data-toggle="info-lei" data-placement="top" title="Lei nº 9394/96, do Decreto Presidencial n° 5.154, de 23 de julho de 2004, Art. 1° e 3° e as normas do Ministério da Educação (MEC) pela Resolução CNE n° 04/99, Art. 11, referente a educação continuada do trabalhador."><strong class="text-uppercase">base legal na Lei</strong></a>. Os Cursos Livres à distância não dependem de registro ou autorização do MEC ou do CEE e são para fins culturais, conhecimentos e curriculares.
                            Desta forma assim que aluno finaliza seu curso no CESAI-EAD e tem sua aprovação no teste, estará comprovando que se qualificou e se atualizou para o mercado de trabalho e seu certificado digital estará liberado para impressão após 24 horas.
                            O aluno poderá também solicitar ao CESAI-EAD seu certificado de conclusão do curso pelo correio, para isso é necessário efetuar o pagamento de uma pequena <strong>TAXA DE EMISSÃO DE CERTIFICADO</strong>.

                        </p>
                        <script>
                            $(function () {
                                $('[data-toggle="info-lei"]').tooltip()
                            })
                        </script>
                    </div>
                    <div class="col-xl-5">
                        <img src="{{ asset('images/certificado.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row" style="background:transparent url('images/tech-bg.jpg') no-repeat center center /cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row mt-4">

                            @foreach($CursoInfos as $insert)

                            <div class="col-xl-3 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('images') }}/{{ $insert->tbl_image }}" class="img-fluid" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $insert->tbl_title }}</h4>
                                        <p class="card-text text-justify">
                                            {{ str_limit($insert->tbl_info, 70) }}
                                        </p>
                                        <a href="#" class="btn btn-warning btn-block btn-lg" data-toggle="modal" data-target=".{{ $insert->tbl_modal }}">Saiba Mais...</a>
                                    </div>
                                </div>
                            </div>

                           @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4 mb-3" style="border-bottom: solid 4px orangered">Para os estudos, toda idade é válida</h1>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-5">
                            <img src="{{ asset('images/melhor-idade.jpg') }}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="col-xl-7">
                            <p class="lead text-justify">A idade ideal para se estudar é aquela na qual você sente vontade de pegar as suas coisas e aprender algo novo, afinal de contas, nunca é tarde demais para aprender.
                                A verdade é que não importa a idade, estudar é sempre algo positivo e válido, porque mais do que aumentar as oportunidades profissionais é também um exercício constante para o cérebro.
                                Um ponto positivo do formato de ensino a distância do CESAI-EAD é que sendo interativo e de fácil aprendizado, abarca pessoas de todas as idades e pelo seu valor ser acessível, abarca também todas as classes sociais.
                            </p>
                            <a href="" class="btn btn-outline-info btn-block btn-lg">Mais Informações...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 mb-3" style="border-bottom: solid 4px orangered">Informática Kids</h1>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-5">
                            <img src="{{ asset('images/info-kids.jpg') }}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="col-xl-7">
                            <p class="lead text-justify">O objetivo do curso de informática para crianças (Kids) é formar o aluno kids com qualificação capaz de entender e executar processos básicos da micro informática, sistema operacional, internet, editores de textos e apresentações de slides. O aluno adquire conhecimentos para utilizar o computador, para realizar tarefas escolares visando desenvolver o raciocínio e o desenvolvimento escolar.
                            </p>
                            <a href="" class="btn btn-outline-info btn-block btn-lg mt-5">Mais Informações...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background: #1C1F3D;>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 mt-5 mb-5" style="color: #c1c1c1">
                        <h3 class="text-center">ORGANIZE SUA ROTINA PARA ESTUDAR A DISTÂNCIA</h3>
                        <p class="text-justify mt-3" style="color: #FFFFFF">
                            O ensino a distância é a grande procura das pessoas no mercado, pois diante da falta de tempo e excesso de trabalho, permite ter acesso aos estudos e obter formação sem que precisem sair de casa.
                        </p>
                        <p class="text-justify" style="color: #FFFFFF">
                            Porém, ao contrário do que muita gente pode pensar, estudar à distância é algo que requer uma rotina e continuidade para que você tenha sequência de aprendizado e não acabe se perdendo em seus conhecimentos.
                        </p>
                        <p class="text-justify" style="color: #FFFFFF">
                            Isso porque, para que você consiga realmente aproveitar melhor o estudo e conseguir o seu certificado é importante que você separe um determinado tempo para se dedicar a esses estudos. Uma boa dica seria se comprometer em dedicar todos os dias a quantidade estipulada, que pode variar dependendo da sua disponibilidade e necessidade.
                        </p>
                        <p class="text-justify" style="color: #FFFFFF">
                            E é exatamente pensando em tudo isso que os cursos a distância do CESAI-EAD são bem desenvolvidos e interativos, onde você tem várias etapas tornando-os mais interessantes e nunca mais deixar de estudar simplesmente porque não pode ou não tem tempo para se deslocar para uma instituição de ensino.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

