<div class="card">
    <div class="card-body">
        <div class="card-title"></div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab" href="#maindata">Основные данные</a>
            </li>
        </ul>
        <br>
        <div class="tab-content">
            <div class="tab-pane active" id="maindata" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-group">
                    <label for="title" class="form-label">Заголовок</label>
                    <input id="title" name="title" type="text" class="form-control" value="{{ old('title', $item->title) }}" minlength="3" required>
                </div>
                <div class="form-group">
                    <label for="slug" class="form-label">Ярлык</label>
                    <input id="slug" name="slug" type="text" class="form-control" value="{{ $item->slug }}">
                </div>
                <div class="form-group">
                    <label for="parent_id" class="form-label">Родитель</label>
                    <select id="parent_id" name="parent_id" class="form-control" required>
                        @foreach($categoryList as $parentCategory)
                        <option value="{{ $parentCategory->id }}" @if($parentCategory->id == $item->parent_id) selected @endif>{{ $parentCategory->id }}. {{ $parentCategory->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Описание</label>
                    <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $item->description) }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
