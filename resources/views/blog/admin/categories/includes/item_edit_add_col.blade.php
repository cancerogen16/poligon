<div class="card">
    <div class="card-body">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</div>
@if($item->exists)
    <br>
    <div class="card">
        <div class="card-body">
            <div class="card-title"></div>
            <ul class="list-unstyled">
                <li>ID: {{ $item->id }}</li>
            </ul>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <h5 class="card-title">Создано</h5>
                <p class="card-text">{{ $item->created_at }}</p>
            </div>
            <div class="form-group">
                <h5 class="card-title">Изменено</h5>
                <p class="card-text">{{ $item->updated_at }}</p>
            </div>
            <div class="form-group">
                <h5 class="card-title">Удалено</h5>
                <p class="card-text">{{ $item->deleted_at }}</p>
            </div>
        </div>
    </div>
@endif
