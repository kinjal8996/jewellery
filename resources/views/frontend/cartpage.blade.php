@extends('Frontend.Layout.main')

@section('main-container')
<h2 style="text-align: center; font-size: 32px; color: #333; margin-bottom: 20px;">Cart Page</h2>

<div style="margin: 50px auto; max-width: 900px; background-color: #f5f5f5; padding: 30px; border-radius: 8px;">
    <!-- Cart Page Title -->

    <!-- Product Card -->
    <div style="background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 20px;">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <!-- Product Image -->
            <div style="flex-basis: 20%; text-align: center;">
                <img src="https://img.freepik.com/premium-photo/gorgeous-indian-bridal-jewellery_1261241-1349.jpg?w=740" alt="Product Image" style="width: 100px; border-radius: 5px;" />
            </div>

            <!-- Product Details -->
            <div style="flex-basis: 60%; padding-left: 20px;">
                <p style="font-size: 18px; margin: 0;">Gorgeous indian bridal jewellery</p>
                <p style="font-size: 14px; color: #666; margin: 5px 0;">Size: 1</p>
                <p style="font-size: 16px; margin: 5px 0;">Price: ₹6660</p>
            </div>

            <!-- Remove Button -->
            <div style="flex-basis: 20%; text-align: right;">
                <button style="background-color: #d9534f; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    <i class="bi bi-trash"></i> Remove
                </button>
            </div>
        </div>
    </div>

    <!-- Total Cost and Checkout -->
    <div style="display: flex; justify-content: space-between; align-items: center; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <!-- Total Cost -->
        <div>
            <p style="font-size: 18px; font-weight: bold; margin: 0;">Total Cost:</p>
            <p style="font-size: 20px; color: #000; margin: 0;">₹6660</p>
        </div>

        <!-- Checkout Button -->
        <div>
            <a href="{{url('/checkoutpage')}} " style="background-color:green; color: white; border: none; padding: 15px 30px; text-decoration:none; font-size: 18px; border-radius: 5px; cursor: pointer;">Checkout</a>
            {{-- <button style="background-color:green; color: white; border: none; padding: 15px 30px; font-size: 18px; border-radius: 5px; cursor: pointer;">Checkout</button> --}}
        </div>
    </div>

    <!-- Back Button -->
    <div style="text-align: center; margin-top: 20px;">
        <button style="background-color: #000; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Back</button>
    </div>
</div>
@endsection
