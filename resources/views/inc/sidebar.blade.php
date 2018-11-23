{{-- Deze sidebar wordt meegenomen in de app.blade layout 
en die zie je dan weer op de andere pagina's --}}

@section('sidebar')
<div class="card">
    <h3>Sidebar</h3>
<p>Dit is de sidebar</p>
</div>
{{-- hiermee valt de append buiten de card als je @show buiten de div zet --}}
@show