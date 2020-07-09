package com.sattva.checout;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.view.View;

import com.sattva.R;

public class CheckoutActivity extends AppCompatActivity implements View.OnClickListener , CheckoutAdapter.CheckoutAppOnClickListener{
private RecyclerView rvitems;
private CheckoutAdapter checkoutAdapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_checkout);


        rvitems = findViewById(R.id.rvitemsid);
        LinearLayoutManager layoutManager = new LinearLayoutManager(getApplicationContext(), RecyclerView.VERTICAL, false);
        rvitems.setLayoutManager(layoutManager);
        checkoutAdapter = new CheckoutAdapter(getApplicationContext(), this);
        rvitems.setAdapter(checkoutAdapter);
    }

    @Override
    public void onClick(View v) {
    }
}
