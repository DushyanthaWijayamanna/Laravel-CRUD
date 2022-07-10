@extends('layouts.app')

@section('content')

<div class="container mt-3" >


          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Product List</h4>

                      </div>
                            <table class="table table-success table-striped">
                                <thead>
                                     <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Action</th>
                                   </tr>
                               </thead>
                               <tbody>


                                   @foreach ($tasks as $key=> $task)
                                    <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                      <td>{{ $task->name }}</td>
                                      <td>{{ $task->quantity }}</td>
                                      <td>{{ $task->price }}</td>

                                      <td>
                                       @if ($task->status == 0)
                                             <span class="badge bg-danger">Not is stock</span>

                                       @else
                                            <span class="badge bg-success">In stock</span>

                                       @endif




                                      </td>
                                      <td>
                                              <a href="{{ route('product.delete',$task->id) }}" class="btn btn-danger">Delete</a>
                                              <a href="{{ route('product.done',$task->id) }}" class="btn btn-info">Update Status</a>

                                      </td>
                                   </tr>

                                   @endforeach



                             </tbody>
                         </table>




                    </div>
                  </div>
              </div>

          </div>

