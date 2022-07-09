package com.example.autotrade;
import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import android.widget.Button;
import android.widget.TextView;


public class LoginActivity extends AppCompatActivity {
    TextView CreateAccount;
    Button LoginBtn;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        CreateAccount = findViewById(R.id.create_account_txtbtn);
        LoginBtn = findViewById(R.id.Login_button);

        CreateAccount.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(LoginActivity.this,SignIn.class);
                startActivity(intent);

            }
        });
        LoginBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // Loging In Procedures if the user exists move to home page or else toast a message
            }
        });
    }
}