package com.dinner.dinner;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


public class LoginActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        final EditText username = findViewById(R.id.username);
        final EditText password = findViewById(R.id.password);
        Button loginBtn = findViewById(R.id.login_btn);

        loginBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //čia rašomas kodas, kuris bus vykdomas ant mygtuko paspaudimo//
                String username2 = username.getText().toString();
                String password2 = password.getText().toString();
                //klaidu zurnalo isvalymas
                username.setError(null);
                password.setError(null);
                if (Validation.isCredentialsValid(username2) && Validation.isCredentialsValid(password2)) {
                    //----------------------------------------------------iš kur-------------į kur---------//
                    Intent gotoSearchActivity = new Intent(LoginActivity.this, SearchActivity.class);
                    startActivity(gotoSearchActivity);
                } else {
                    username.setError( getResources().getString(R.string.login_invalid_credentials_message));
                    username.requestFocus();
                }
            }
        });

    }

}
