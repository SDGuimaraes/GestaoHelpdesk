<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 aling="center">Email</h3>
                <hr>
    @if ($inbox === null)
                <h4>
                    Não Conectado...
                </h4>
    @else
                <table id="inbox" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Sub-titulo</th>
                            <th>Nome</th>
                            <th>email</th>
                            <th>data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $html = '';
                        $no =1;
                        @endphp                    
    @foreach ($inbox as $in)
                        @php
                        $attachment = '';
                        @endphp

                        @if (!empty($in['attachments']))
                            @foreach ($in['attachments'] as $a)
                            @php
                            $attachment .= '<br><a href="'.$a.'" target="_BLANK">'.end(explode('/',$a)).'</a></br>';
                            @endphp
                            @endforeach    
                        @endif
                            @php
                            $html.='<tr><td>'.$no.'</td>';
                            $html.='<td><a href="#" data-message="'.htmlentities($in['message'].(!empty($attachment) ? '<hr> Attachments:'.$attachment : '')).'" class="message" data-toggle="modal" data-target="#addModal">'.substr($in['subject'],0,120).'</a></td>';
                            $html.='<td>'.(empty($in['from']['name']) ? '[empty]' : $in['from']).'</td>';
                            $html.='<td><a href= "mailto:'.$in['from']['address'].'?subject=Re:'.$in['subject'].'">'.$in['from']['address'].'</a></td>';
                            $html.='<td>'.date('Y-m-d h:i:sa', $in['date']).'</td></tr>';
                            $no++;
                            echo $html;
                        @endphp
    @endforeach   
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body" id="message">
          
        </div>
      </div>
    </div>
 </div>
</html>