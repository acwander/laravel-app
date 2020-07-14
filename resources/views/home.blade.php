@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class='border-bottom'>{{ $user->username }}'s Scorecards</h1>
    <p>{{ $user->profile->about }}</p>
    <!-- scorecards -->
    <div class='mt-5'>
        <div class='d-flex'>
            <h5 class='w-100'>Course Name:</h5>
            <h5 class='pr-5 mr-5'>Date:</h5>
        </div>
        <table class="table-bordered text-center scorecard">
            <tbody>
                <tr>
                    <th scope="row">Distance</th>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col bg-dark'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                </tr>
                <tr>
                    <th scope="row">Par</th>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col bg-dark'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                    <td class='col bg-dark'></td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>Front</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>Back</td>
                    <td>Total</td>
                    <td>+/-</td>
                </tr>
                <tr class="table-striped">
                    <th scope="row">Player 1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Player 2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-striped">
                    <th scope="row">Player 3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </class=>
                <tr>
                    <th scope="row">Player 4</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
