@section('css')
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
@endsection
@section('js')
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.form-validator.js"></script>
@endsection
@include('templates/header')
<div class="content">
    <div class="contents_scroll">
        <div class="privacy_policy">
            <div class="custom_container">
                <h1 class="main_title">Privacy Policy</h1>
                <div class="page_title">TITLE H2</div>
                <ul>
                    <li>
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </li>
                    <li>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                        quo voluptas nulla pariatur?"
                    </li>
                    <li>
                        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure?"
                    </li>
                </ul>
                <div class="page_title">TITLE H2</div>
                <div class="inner_description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="page_title">TITLE H2</div>
                <div class="inner_description">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    <br />
                    <br />
                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
@endsection
@include('templates/footer ')
