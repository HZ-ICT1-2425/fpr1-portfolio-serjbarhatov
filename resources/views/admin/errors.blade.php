@if ($errors->any())
    <article style="margin-top: 2rem" class="message is-danger">
        <div class="message-header">
            <p>Errors</p>
        </div>
        <div class="message-body">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </article>
@endif
