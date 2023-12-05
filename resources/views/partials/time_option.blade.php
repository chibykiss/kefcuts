 @if(!empty($newtimes))
    @foreach ($newtimes as $time)
        <div class="radio-opt">
            <input type="radio" id="{{ $time['time'] }}"  value="{{ $time['id'] }}" name="selecttime"><label for="{{ $time['time'] }}">{{ $time['time'] }}</label>
        </div>
    @endforeach
@endif  