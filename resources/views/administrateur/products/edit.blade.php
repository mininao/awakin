<form method="POST" action="{{ route('updateProduct', $product) }}" accept-charset="UTF-8">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label for="title">Nom du produit :</label>
    <input placeholder="Nom" name="title" type="text" value="{{ $product->title }}">
    <label for="description">Description :</label>
    <textarea placeholder="Description" name="description" cols="50" rows="10">{{ $product->description }}</textarea>
    <label for="price">Prix :</label>
    <input placeholder="Prix" name="price" type="text" value="{{ $product->price }}">
    <input type="submit" value="Sauvegarder les changements">
</form>
