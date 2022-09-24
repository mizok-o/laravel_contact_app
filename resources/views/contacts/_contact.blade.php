<tr>
    <th scope="row">2</th>
    <td>{{ $contact['name'] }}</td>
    <td>{{ $contact['phone'] }}</td>
    <td>frederick@test.com</td>
    <td>Company one</td>
    <td>
        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info"
            title="Show"><i class="fa fa-eye"></i></a>
        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary"
            title="Edit"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"
            onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
    </td>
</tr>
