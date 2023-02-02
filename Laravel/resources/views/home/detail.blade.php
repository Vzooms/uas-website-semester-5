@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column">
            <h4>Nama Barang</h4>
            <div class="d-flex w-100 gap-5">
                <div style="width:20%">
                    <img class="w-100" src="/test.png" alt="">
                </div>

                <div style="width: 80%">
                    <h5>Price : Rp. 1,000.000,-</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, dolor tempore quos excepturi magnam maiores ut qui? Numquam similique veritatis dolorem tenetur in dicta cupiditate quaerat. Maxime perferendis autem ab soluta, ullam excepturi dignissimos mollitia, pariatur atque optio possimus iusto officiis fugiat qui. Praesentium quibusdam id delectus? Aut corrupti ab quasi aperiam optio similique eum dicta non, quia vero harum necessitatibus fugit sed magni iusto illo repellendus beatae excepturi minus ipsum amet animi aliquid? Dolore, velit? Iure obcaecati repudiandae iste nemo animi dicta a consectetur mollitia blanditiis? Repellendus corporis dolorem quidem libero doloribus cupiditate minus quisquam magni. Ea impedit voluptatem eum sequi dolore illo quo dicta quam? Dolores sint officiis consectetur quos aspernatur quo mollitia eum accusantium, possimus, nulla unde quisquam vel ullam ipsam voluptates similique quis, quidem iure qui sit! Quo nobis nihil doloremque iusto, assumenda molestias a nesciunt atque, delectus eveniet asperiores sint ad incidunt nam. Corporis molestiae laborum sunt iure aliquid. Dolorum tenetur quasi mollitia eveniet pariatur repellat id, autem aliquid nulla. Fugiat, debitis quos. Eligendi enim sequi tempora eveniet iure est eaque accusamus nesciunt aliquam tenetur necessitatibus excepturi quisquam libero, tempore corporis, vero nemo molestias laborum ab quia! Iure libero corrupti, accusamus sit consequuntur quis beatae!
                    </p>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <h3 class="btn btn-warning">
                    Buy
                </h3>
            </div>
        </div>
    </div>

@endsection
