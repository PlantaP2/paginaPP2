@props(['name', 'id', 'informacion'])
<div class="collapse border border-0" id="{{ $id }}">
    <div class="card card-body ms-3 border border-0" style="background-color:#52515138;">
        <form {{ $attributes }} method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <textarea name="{{ $name }}" id="" cols="20" rows="5" class="form-control" required>{{ $informacion }}</textarea>
            </div>

            <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
    </div>
</div>