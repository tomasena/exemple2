@extends('template')
 
@section('titre')
    Détail du produit
@endsection
 
@section('contenu')
    <p>C'est le produit n° {{ $numero }}</p>
    <p>
    @if ( $numero  == 1)
    I have one record!
    @else
    Plusieurs produits        
    @endif
    
    </p>

@endsection