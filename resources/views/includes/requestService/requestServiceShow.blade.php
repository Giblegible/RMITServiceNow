    <p>ID: {{ $ticket->id }}</p>
    <p>Work Area: {{ $ticket->workArea}}</p>
    <hr>
    <p>Service Area: {{ $ticket->serviceArea}}</p>
    <p>Hardware: {{ $ticket->hardwareType}}</p>
    <p>Software: {{ $ticket->softwareType}}</p>
    <hr>
    <p>Description: {{ $ticket->problemDescription}}</p>
    <p>Status: {{ $ticket->problemStatus }}</p>
    <p>Severity: {{ $ticket->problemSeverity }}</p>
    <p>Comments:</p>
    @if($comments != null)
        @foreach($comments as $post)
            {{--Check if the message has a user name.
            If yes, print the name of user.
            If no, print the admin comment (since comment exists, and not customer).--}}
            @if(!is_null($post->message))
                <div class="col-md-12" id="customerComment">
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">{{ $post->message->name }}</div>
                            <div class="panel panel-body">{{ $post->comment }}</div>
                            <div class="panel-footer">{{ $post->created_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12" id="adminComment">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">{{ $post->adminComment }}</div>
                            <div class="panel panel-body">{{ $post->comment }}</div>
                            <div class="panel-footer">{{ $post->created_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else
        <p>No comments</p>
    @endif
    <hr>