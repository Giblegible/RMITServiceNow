<section id="action" class="responsive">

    <div class="vertical-center">

        <div class="container" >

            <div class="row">

                <div class="action">

                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <h1 class="title"><b>Query Details</b></h1>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<div class="col-md-12">
    <h2>Contact Information</h2>
    <hr>
    <div class="col-md-6">
        <p><b>Name:</b> {{ $ticket->customer->name }}</p>
        <p><b>Email:</b> {{ $ticket->customer->email }}</p>
        <p><b>Phone Number:</b> {{ $ticket->customer->phoneNum }}</p>
    </div>
</div>
<div class="col-md-12">
    <h2>Query Details</h2>
    <hr>
    <div class="col-md-6">
        <p><b>Ticket ID:</b> {{ $ticket->id }}</p>
        <p><b>Work Area:</b> {{ $ticket->workArea }}</p>
        <p><b>Service Area:</b> {{ $ticket->serviceArea }}</p>
    </div>
    <div class="col-md-6">
        <p><b>Hardware:</b> {{ $ticket->hardwareType }}</p>
        <p><b>Software:</b> {{ $ticket->softwareType }}</p>
    </div>
</div>
<div class="col-md-12">
    <hr>
    <div class="col-md-6">
        <p><b>Status:</b> {{ $ticket->problemStatus }}</p>
        <p><b>Severity:</b> {{ $ticket->problemSeverity }}</p>
        <p><b>Description:</b> {{ $ticket->problemDescription}}</p>
    </div>
    <div class="col-md-6">
        <p><b>Date Created:</b> {{ $ticket->created_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</p>
        <p><b>Last Updated:</b> {{ $ticket->updated_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</p>
    </div>
</div>
<div class="col-md-12">
    <h2>Comments</h2>
    <hr>
    <div class="col-md-12">
        @if($comments != null)
            @foreach($comments as $post)
                {{--Check if the message has an admin comment.
                If no, print the name of user.
                If yes, print the admin comment (since comment exists, and not customer).--}}
                @if(is_null($post->adminComment))
                    <div class="col-md-12" id="customerComment">
                        <div class="col-md-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">{{ $post->customer_queries->customer->name }}</div>
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
            <p><b><i>No comments have been made on this case.</i></b></p>
        @endif
    </div>
</div>