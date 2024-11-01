<form method="POST" action="{{ route('do-upload') }}" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-light" style="max-width: 400px; margin: auto;">
    @csrf
    <div class="mb-3">
        <h1>Nguyễn Nhật Kỳ Long-0306221036</h1>
        <label for="file-upload" class="form-label">Upload hình ảnh</label>
        <input type="file" id="file-upload" multiple name="hinh_anh[]" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary w-100">Upload</button>
</form>
