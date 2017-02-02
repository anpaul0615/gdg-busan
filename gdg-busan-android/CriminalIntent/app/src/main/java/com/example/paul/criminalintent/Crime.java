package com.example.paul.criminalintent;

import java.util.Date;
import java.util.UUID;

/**
 * Created by PAUL on 2016-08-26.
 */
public class Crime {

    private UUID mId;
    private String mTitle;

    public Crime() {
        this.mId = UUID.randomUUID();
    }

    public UUID getId() {
        return mId;
    }
    public String getTitle() {
        return mTitle;
    }
    public void setTitle(String title) {
        mTitle = title;
    }
}
