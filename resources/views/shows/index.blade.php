<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Fall Logs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="storage/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>

    <body style='background-image: url("https://50135521f3144bda9c8247e3307d9283.vfs.cloud9.ap-northeast-1.amazonaws.com/storage/background_index.jpg");'>

      {{-- ナビゲーションバー --}}
      @include('commons.navbar')

      <div class="container-fruid">
          {{-- エラーメッセージ --}}
          @include('commons.error_messages')

        <div class='col-sm-11 mx-auto'>

          @include('shows.period')

          <table class="index table text-center">
           
              <tr class='thead'>
                <th scope="col"><i class="fas fa-crown"></i></th>
                <th scope="col">date</th>
                <th scope="col">1st</th>
                <th scope="col">2nd</th>
                <th scope="col">3rd</th>
                <th scope="col">4th</th>
                <th scope="col">5th</th>
                <th scope="col">6th</th>
                <th scope="col">7th</th>
                <th scope="col"><i class="fas fa-edit"></i></th>
              </tr>
          
            <tbody>
              <tr>
              @foreach($shows as $show)
                  <td scope='row'>@if($show->result == 1)<i class="crown fas fa-crown"></i>@endif</td>
                  <td scope='row'>{{ $show->date }}</td>
                  <td>{{ $show->stage1 }}</td>
                  <td>{{ $show->stage2 }}</td>
                  <td>{{ $show->stage3 }}</td>
                  <td>{{ $show->stage4 }}</td>
                  <td>{{ $show->stage5 }}</td>
                  <td>{{ $show->stage6 }}</td>
                  <td>{{ $show->stage7 }}</td>
                  <td>
                      {!! Form::open(['route'=>['shows.edit', $show->id],'method' => 'get']) !!}
                        {!! Form::button('<i class="fas fa-edit"></i>', ['class' => "btn btn-info p-0", 'type' => 'submit']) !!}
                      {!! Form::close() !!}
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
      
      @include('shows.cell_color')

      {{-- ページネーションのリンク --}}
      {{ $shows->links() }}

    </body>
</html>