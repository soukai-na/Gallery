@foreach ($images as $image)
    <img src="{{ url('images/' . $image->category) }}"  class="mb-3" width="250px">
   @endforeach    