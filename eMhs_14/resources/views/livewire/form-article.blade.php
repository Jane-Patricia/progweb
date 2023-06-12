<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" class="form-control" placeholder="Masukan judul">
        </div>

        <div class="form-group">
            <textarea wire:model="deskripsi" cols="30" rows="5" class="form-control" placeholder="Masukan deskripsi">              
            </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
