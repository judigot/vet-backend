/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IUser } from "../../interfaces/interfaces";

type IBody = IUser;

export const readUser = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/users`,
  });
  return result;
};

