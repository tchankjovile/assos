<!-- Modal -->
<div class="modal fade" id="modalDon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Faire un don!!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="devise">Devise</label>
                    <select name="devise" id="devise" class="form-control form-select">
                    @foreach(config('misc.don_devises') as $devise)
                            <option value="{{$devise}}">{{$devise}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="montant">Montant à donner</label>
                    <input type="number" id="montant" name="montant" value="0.1" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Donner</button>
            </div>
        </div>
    </div>
</div>
