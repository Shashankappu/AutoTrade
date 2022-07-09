package com.example.autotrade;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import org.w3c.dom.Text;

public class SignIn extends AppCompatActivity {
    TextView LogintxtBtn;
    Button SignInBtn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_in);
        LogintxtBtn = findViewById(R.id.login_txtbtn);
        SignInBtn = findViewById(R.id.Signin_button);
        LogintxtBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent loginintent = new Intent(SignIn.this, LoginActivity.class);
                startActivity(loginintent);
            }
        });
        SignInBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // signing In procedures
                // put the below intent if the user entered all the credentials and his account is ready
                // put a toast message on the successfull creation of account
                Intent intent = new Intent(SignIn.this, LoginActivity.class);
                startActivity(intent);
            }
        });
    }
}