<div class="row">
  <form action="{{ route('ideas.update', $idea) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" id="title" name="title" maxlength="100" value="{{ $idea->title }}" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrição da Ideia</label>
      <textarea class="form-control" id="description" name="description" rows="3" required>{{ $idea->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>

  </form>
</div>