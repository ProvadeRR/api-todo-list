<table>
    <tr>
        <td>method</td>
        <td>path</td>
        <td>request</td>
        <td>response</td>
    </tr>
    <tr>
        <td>get</td>
        <td>/api/todo/get</td>
        <td>empty</td>
        <td>{data: object, message: sting} http<div>200/404</td>
    </tr>
    <tr>
        <td>post</td>
        <td>/api/todo/create</td>
        <td>{title(max50),description(max:200),<br>date_start(null),date_end(null)}</td>
        <td>{data: object, message: sting} http<div>201/404</td>
    </tr>
    <tr>
        <td>patch</td>
        <td>/api/todo/{idtodo}/update</td>
        <td>{title(max50),description(max:200),<div>date_start(null),date_end(null)}</td>
        <td>{data: object, message: sting} http<div>200/404<div><br></td>
    </tr>
    <tr>
        <td>delete</td>
        <td>/api/todo/{idtodo}/delete</td>
        <td>empty</td>
        <td>{ data:empty<span style="font-size: 1rem;">message: sting}</span>http<div>200/404</td>
    </tr>
</table>
