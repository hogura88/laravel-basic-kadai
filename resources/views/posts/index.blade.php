<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
 <table>
         <tr>
             <th>ID</th>
             <th>商品名</th>
             <th>価格</th>
             <th>作成日時</th>
             <th>更新日時</th>
         </tr>
         @foreach($posts as $post)
             <tr>
                 <td>{{ $post->id }}</td>
                 <td>{{ $post->product_name }}</td>
                 <td>{{ $post->price }}</td>
                 <td>{{ $post->created_at }}</td>
                 <td>{{ $post->updated_at }}</td>
             </tr>            
         @endforeach       
     </table>
 </body>
 
 </html>