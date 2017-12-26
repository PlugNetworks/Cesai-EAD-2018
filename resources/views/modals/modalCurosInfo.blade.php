@foreach($CursoInfos as $insert)

<div class="modal fade {{ $insert->tbl_modal }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"><span class="{{ $insert->tbl_icon }}"></span> {{ $insert->tbl_title }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="{{ asset('images') }}/{{ $insert->tbl_image }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                            <div class="col-xl-8">
                                <p class="text-justify" style="color: #2C3E50; font-size: 17px">
                                    {{ $insert->tbl_info }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-info">Cursos de {{ $insert->tbl_title }}</a>
                <a href="" class="btn btn-danger" data-dismiss="modal">Fechar</a>
            </div>
        </div>
    </div>
</div>

@endforeach