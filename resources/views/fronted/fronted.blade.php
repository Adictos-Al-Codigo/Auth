<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            @if (!Auth::check())
            <a class="navbar-brand" href="#">Autentificación</a>
            @endif

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if (Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{route('Dashboard')}}">Ver Perfil</a>
              </li>
              @if (@session('perfil_id') == 1)
              <li class="nav-item">
                <a class="nav-link" href="{{route('Protegido')}}">Protegida</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Protegido2')}}">Protegida 2</a>
              </li>
              @endif

              <li class="nav-item">
                <a class="nav-link" href="{{route('Dashboard')}}">Dashboard</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Login')}}">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Registrar')}}">Registrarse</a>
              </li>
              @endif
            </ul>
            @if (Auth::check())
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <a style="margin-left: 30px" class="navbar-brand" href="#">Hola, {{Auth::user()->name}}</a>   
            </form>
            <a href="{{route('Logout')}}"><button class="btn btn-primary">Cerrar Sesión</button></a> 
            @endif
          </div>
          
        </div>
      </nav>
      <section>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at quod sed dolore quae expedita laboriosam aut, voluptatibus beatae nisi obcaecati! Officia quos fugiat inventore suscipit pariatur. Nostrum, numquam vitae.
            Autem, dolor dolore. Magni exercitationem omnis animi sint, quidem, voluptatem blanditiis consequuntur temporibus quam eius possimus eum alias. Fuga, esse tenetur incidunt odio eligendi itaque eveniet aut cum porro nobis.
            Quis similique consequuntur tempore dolore, consequatur eum culpa ut quia, voluptate, iusto quo nam. Saepe, expedita obcaecati, similique consequatur magnam odio veniam reprehenderit dolor quod vel dolorum doloribus enim. Maiores?
            Fugiat fugit eius nam esse perferendis sapiente? Molestias, saepe consequatur voluptatem recusandae dolore architecto sit? Enim illum sequi totam eaque laboriosam, incidunt unde dolore deleniti repudiandae iure, nobis placeat molestiae!
            Quas qui iusto quo molestias obcaecati provident temporibus aliquam doloremque molestiae est voluptatibus id modi praesentium minima vero corporis harum, soluta nam eos quia tempore. Ea, corporis? Quasi, perferendis labore?
            Asperiores consequatur perspiciatis cupiditate eveniet, aut nisi doloribus facilis fuga eaque deserunt, eius quasi debitis non dolorem cumque architecto. Commodi, saepe aut magnam doloremque asperiores atque minima inventore unde consequuntur.
            Iusto dolore modi eos recusandae rem distinctio voluptas eius perspiciatis, voluptatum voluptate facilis alias optio quae laudantium? Blanditiis ipsa eveniet expedita iure necessitatibus soluta ea assumenda, ab incidunt fugiat sit.
            Veniam facilis nemo quasi eos aliquam atque fugiat necessitatibus magnam temporibus doloremque eius reiciendis illo, deleniti debitis, libero nulla, iusto delectus laudantium dolorem cupiditate sapiente. Soluta possimus facilis vero quis.
            At, architecto nobis eius impedit dignissimos nam reprehenderit mollitia hic explicabo minima quia, repellendus deleniti recusandae soluta voluptate deserunt ab cumque blanditiis tempore! Vero odio fuga aliquid. Nesciunt, ducimus modi!
            Porro magnam eligendi neque quibusdam temporibus expedita labore assumenda quam non atque voluptas ad rem error, magni recusandae blanditiis enim, cum delectus necessitatibus obcaecati quasi incidunt voluptatibus ipsa. Necessitatibus, praesentium!
            Atque nulla odit enim assumenda dolorem. Ipsa placeat consequatur rerum delectus minima doloremque voluptate expedita. Eveniet, soluta dolorem nam architecto odit deserunt et minus nihil quibusdam ea incidunt quasi iste!
            Ducimus minima deleniti temporibus eum labore commodi obcaecati quae. Molestias, voluptatum rerum, possimus nostrum debitis vitae excepturi eligendi ad distinctio asperiores iste itaque quos aspernatur. Doloribus magni commodi animi ad.
            Blanditiis, asperiores laudantium. Veritatis officiis reiciendis quo provident quaerat delectus nam suscipit doloribus in repudiandae vel sed commodi itaque corrupti minus ipsam soluta velit dignissimos, facilis ratione impedit quam. Tenetur?
            Minus tempore mollitia ipsum cumque et expedita repellat ratione laborum quia nesciunt. Iure quos dicta molestias. Sunt nisi soluta cupiditate eum dolores eligendi optio eaque neque, culpa provident cumque ratione?
            Illum sunt magni velit nam tenetur aspernatur hic dolorum maxime quas harum sint, necessitatibus nesciunt excepturi minus debitis vel quod culpa labore dolorem optio libero officia? Obcaecati deleniti ipsam debitis.
            A eum esse, voluptates quisquam et quia at, doloribus facilis ratione expedita vel veritatis assumenda adipisci libero. Ex similique perferendis error amet suscipit repellat iusto distinctio rem provident? Voluptates, suscipit.
            Expedita numquam eaque qui tempora dicta impedit aspernatur quaerat magni corrupti illo. Vel harum quod ea, voluptatibus incidunt perspiciatis. Quibusdam nemo hic assumenda iste? In nam porro veniam quam aperiam?
            Pariatur rerum ipsa nobis expedita, omnis, placeat eius fugiat quaerat atque eum error iusto. Fuga vel animi, voluptatibus aperiam sapiente veritatis? Dolorum qui culpa praesentium nemo laboriosam eius expedita quibusdam!
            Esse repudiandae dolores animi ipsam culpa magni earum blanditiis quae ea amet, voluptates placeat totam soluta labore perferendis rerum, debitis sed explicabo quaerat fugiat quos nesciunt maiores nostrum perspiciatis? Suscipit.
            Doloribus placeat fugit ad, laboriosam nobis perferendis omnis nulla exercitationem debitis ratione esse beatae voluptatum quaerat sint non sapiente eaque voluptatibus sunt fugiat veniam aperiam? Minima, provident. Autem, consectetur vel.
        </p>
      </section>
      <footer class="text-center">
        Todos los Derechos Reservados &copy; - Globonet S.A
      </footer>
</body>
</html>