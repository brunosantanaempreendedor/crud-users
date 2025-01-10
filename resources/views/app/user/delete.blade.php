<div class="modal fade" id="deleteUser{{ $d->uuid }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="{{ route('user.destroy', $d->uuid) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Atenção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 m-b30">
                            <p>Tem certeza que deseja apagar o registro({{$d->name}})?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row" style="margin-top: 30px;">
                        <div id="button-container" class="col-sm-12">
                            <button class="btn btn-danger btn-block" type="submit">Sim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
