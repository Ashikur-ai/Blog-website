@extends('Frontend.master')
@section('feature')
    <article class="post featured">
        <header class="major">
            <span class="date">{{ $featurePost->date }}</span>
            <h2><a href="#">{{ $featurePost->header }}</h2>
            <p>{{ $featurePost->excerpt }}</p>
        </header>
        <a href="#" class="image main"><img src="https://ashikur-rahman2335.imgbb.com/" alt="" /></a>
        <ul class="actions special">
            <li><a href="{{ route('post', $featurePost->id) }}" class="button large">Full Story</a></li>
        </ul>
    </article>
@endsection

@section('posts')
    @foreach($data as $row)
        <article>
            <header>
                <span class="date">{{ $row->date }}</span>
                <h2><a href="#">{{ $row->header }}</a></h2>
            </header>
            <a href="#" class="image fit"><img src="{{ $row->image }}" alt="" /></a>
            <p>{{ $row->excerpt }}</p>
            <ul class="actions special">
                <li><a href="{{ route('post', $row->id) }}" class="button">Full Story</a></li>
            </ul>
        </article>
    @endforeach
@endsection
